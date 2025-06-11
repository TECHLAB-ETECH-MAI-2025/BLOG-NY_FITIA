import { useNotification } from "../chat/Notification";

function MenuChat() {
//   const { unreadMessages } = useNotification();

//   const totalUnread = Object.values(unreadMessages).reduce((a, b) => a + b, 0);

  return (
    <div className="sidebar-sticky pt-3">
      <a className="dropdown-item" href="/userList">
        <i className="bi bi-chat-dots-fill text-primary"></i>
        {/* {totalUnread > 0 && <span className="badge bg-danger ms-2">{totalUnread}</span>} */}
      </a>
    </div>
  );
}

export default MenuChat;
