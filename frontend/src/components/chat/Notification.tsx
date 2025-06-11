import React, { createContext, useContext, useState } from 'react';

interface NotificationContextType {
  unreadMessages: Record<string, number>;
  setUnreadForUser: (userId: string, count: number) => void;
  markMessagesAsRead: (userId: string) => void;
}

const NotificationContext = createContext<NotificationContextType | undefined>(undefined);

export const NotificationProvider: React.FC<{ children: React.ReactNode }> = ({ children }) => {
  const [unreadMessages, setUnreadMessages] = useState<Record<string, number>>({});

  const setUnreadForUser = (userId: string, count: number) => {
    setUnreadMessages((prev) => ({ ...prev, [userId]: count }));
  };

  const markMessagesAsRead = (userId: string) => {
    setUnreadMessages((prev) => {
      const { [userId]: _, ...rest } = prev;
      return rest;
    });
  };

  return (
    <NotificationContext.Provider
      value={{ unreadMessages, setUnreadForUser, markMessagesAsRead }}
    >
      {children}
    </NotificationContext.Provider>
  );
};

export const useNotification = () => {
  const context = useContext(NotificationContext);
  if (!context) {
    throw new Error("useNotification must be used within a NotificationProvider");
  }
  return context;
};
