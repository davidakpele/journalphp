class SecurityFilterChain{
    generateRandomToken =()=> {
        // Generate a random token using the crypto API
        const randomBytes = new Uint8Array(16);
        crypto.getRandomValues(randomBytes);
        const token = Array.from(randomBytes)
            .map(byte => byte.toString(16).padStart(2, '0'))
            .join('');
        return `${token.substr(0, 6)}-${token.substr(8, 8)}-${token.substr(12, 4)}-${token.substr(12, 6)}-${token.substr(20)}`;
    }
    getHeader = async () => {
        var response, data, readText;
        var headers = new Headers();
        headers.append('Authorization', 'Bearer '+this.generateRandomToken()+'');
        response = await fetch(root_url + "api/collect?iat=sort&action=true&target=central&v2=rgstr", { headers: headers });
        if (!response.ok) {
            throw new Error(`Network response was not OK: ${response.status}`);
        } else {
            // Parse the response as text
            data = await response.text();
            readText = JSON.parse(data);
           return (readText);
        }
    }
    // web socket connectio 
    socketConnection = async () => {
        socket.addEventListener('open', (event) => {
            // Connection is open
        });

        socket.addEventListener('message', (event) => {
            const message = event.data;
            // Handle the received message
        });

        socket.addEventListener('error', (event) => {
            console.error('WebSocket error', event);
        });

        socket.addEventListener('close', (event) => {
            if (event.wasClean) {
                console.log('Connection closed cleanly, code=' + event.code + ', reason=' + event.reason);
            } else {
                console.error('Connection abruptly closed');
            }
        });
        //Handling Server-Side WebSocket
        const WebSocket = require('ws');
        const server = new WebSocket.Server({ port: 8080 });

        server.on('connection', (socket) => {
            console.log('Client connected');
            socket.on('message', (message) => {
                socket.send('You said: ' + message);
            });
            socket.on('close', () => {
                console.log('Client disconnected');
            });
        });
        socket.close(1000, 'Connection closed by the client');
    }
}

// Export the class, so it can be imported in other files
export default SecurityFilterChain;