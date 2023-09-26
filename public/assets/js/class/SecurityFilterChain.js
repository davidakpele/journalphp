class SecurityFilterChain{
    getHeader = async()=> {
        var response, data, readText;
        var headers = new Headers();
        headers.append('Authorization', 'Bearer M1iZ89-lx84jO24-e3fW-sQ9u3-kq012A');
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
}

// Export the class, so it can be imported in other files
export default SecurityFilterChain;