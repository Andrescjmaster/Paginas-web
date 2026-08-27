<style>
.chat-fab {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #d2b48c;
    border: none;
    color: #1a1a1a;
    font-size: 28px;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s;
}
.chat-fab:hover {
    transform: scale(1.1);
    background: #c4a47a;
}
.chat-fab .badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #dc3545;
    color: #fff;
    font-size: 12px;
    min-width: 22px;
    height: 22px;
    border-radius: 11px;
    display: none;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}
.chat-fab .badge.show { display: flex; }

.chat-panel {
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 340px;
    max-height: 450px;
    background: #2b3035;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.4);
    z-index: 9998;
    display: none;
    flex-direction: column;
    overflow: hidden;
    border: 1px solid #444;
}
.chat-panel.open { display: flex; }

.chat-header {
    background: #1e2125;
    padding: 14px 18px;
    border-bottom: 1px solid #444;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.chat-header h5 {
    margin: 0;
    color: #d2b48c;
    font-size: 15px;
    font-weight: 600;
}
.chat-header .close-btn {
    background: none;
    border: none;
    color: #888;
    font-size: 20px;
    cursor: pointer;
    padding: 0 4px;
}
.chat-header .close-btn:hover { color: #fff; }

.chat-messages {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    max-height: 300px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.chat-messages::-webkit-scrollbar { width: 6px; }
.chat-messages::-webkit-scrollbar-track { background: transparent; }
.chat-messages::-webkit-scrollbar-thumb { background: #555; border-radius: 3px; }

.chat-msg {
    background: #3c4248;
    border-radius: 10px;
    padding: 10px 12px;
    max-width: 85%;
}
.chat-msg .msg-user {
    font-size: 12px;
    font-weight: 600;
    color: #d2b48c;
    margin-bottom: 2px;
}
.chat-msg .msg-text {
    font-size: 13px;
    color: #e9ecef;
    word-wrap: break-word;
}
.chat-msg .msg-time {
    font-size: 10px;
    color: #888;
    text-align: right;
    margin-top: 2px;
}

.chat-loading {
    text-align: center;
    color: #888;
    font-size: 12px;
    padding: 20px;
}

.chat-input-area {
    padding: 10px 14px 14px;
    border-top: 1px solid #444;
    display: flex;
    gap: 8px;
}
.chat-input-area input {
    flex: 1;
    background: #1e2125;
    border: 1px solid #555;
    border-radius: 20px;
    padding: 8px 14px;
    color: #e9ecef;
    font-size: 13px;
    outline: none;
}
.chat-input-area input:focus {
    border-color: #d2b48c;
}
.chat-input-area input::placeholder { color: #888; }
.chat-input-area button {
    background: #d2b48c;
    border: none;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.chat-input-area button:hover { background: #c4a47a; }
</style>

<div class="chat-fab" id="chatFab" onclick="toggleChat()">
    <i class="bi bi-chat-dots"></i>
    <span class="badge" id="chatBadge">0</span>
</div>

<div class="chat-panel" id="chatPanel">
    <div class="chat-header">
        <h5><i class="bi bi-chat-dots"></i> Chat Alquimia</h5>
        <button class="close-btn" onclick="toggleChat()">&times;</button>
    </div>
    <div class="chat-messages" id="chatMessages">
        <div class="chat-loading">Cargando mensajes...</div>
    </div>
    <div class="chat-input-area">
        <input type="text" id="chatInput" placeholder="Escribe un mensaje..." maxlength="500" onkeydown="if(event.key==='Enter') sendMessage()">
        <button onclick="sendMessage()"><i class="bi bi-send"></i></button>
    </div>
</div>

<script>
let chatOpen = false;

function toggleChat() {
    chatOpen = !chatOpen;
    document.getElementById('chatPanel').classList.toggle('open', chatOpen);
    document.getElementById('chatFab').querySelector('i').className = chatOpen ? 'bi bi-x-lg' : 'bi bi-chat-dots';
    if (chatOpen) loadMessages();
}

function loadMessages() {
    fetch('chat_handler.php?action=load')
        .then(r => r.json())
        .then(data => {
            const el = document.getElementById('chatMessages');
            if (!Array.isArray(data) || data.length === 0) {
                el.innerHTML = '<div class="chat-loading">No hay mensajes aún. ¡Sé el primero!</div>';
                return;
            }
            el.innerHTML = data.map(m => `
                <div class="chat-msg">
                    <div class="msg-user">${escapeHtml(m.usuario_nombre)}</div>
                    <div class="msg-text">${escapeHtml(m.mensaje)}</div>
                    <div class="msg-time">${m.created_at}</div>
                </div>
            `).join('');
            el.scrollTop = el.scrollHeight;
        });
}

function sendMessage() {
    const input = document.getElementById('chatInput');
    const msg = input.value.trim();
    if (!msg) return;

    const form = new FormData();
    form.append('mensaje', msg);

    fetch('chat_handler.php?action=send', { method: 'POST', body: form })
        .then(r => r.json())
        .then(data => {
            if (data.ok) {
                input.value = '';
                loadMessages();
                updateBadge();
            } else if (data.error) {
                alert(data.error);
            }
        });
}

function updateBadge() {
    fetch('../helpers/chat_handler.php?action=count')
        .then(r => r.json())
        .then(data => {
            const badge = document.getElementById('chatBadge');
            if (data.total > 0) {
                badge.textContent = data.total;
                badge.classList.add('show');
            } else {
                badge.classList.remove('show');
            }
        });
}

function escapeHtml(text) {
    const d = document.createElement('div');
    d.textContent = text;
    return d.innerHTML;
}

updateBadge();
setInterval(updateBadge, 15000);
</script>
