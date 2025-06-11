import { useEffect, useState } from "react";

type MercureMessage = {
  type: string;
  senderId: number;
  receiverId: number;
};

const useMercure = (userId: number): MercureMessage | null => {
  const [event, setEvent] = useState<MercureMessage | null>(null);

  useEffect(() => {
    const url = new URL("http://localhost/.well-known/mercure"); // adapte selon ton projet
    url.searchParams.append("topic", `user/${userId}`);

    const eventSource = new EventSource(url.toString(), { withCredentials: true });

    eventSource.onmessage = (e) => {
      try {
        const data = JSON.parse(e.data);
        setEvent(data);
      } catch (error) {
        console.error("Invalid Mercure data", error);
      }
    };

    return () => {
      eventSource.close();
    };
  }, [userId]);

  return event;
};

export default useMercure;
