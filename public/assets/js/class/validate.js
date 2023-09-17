
class auth {
  constructor(name) {
    this.name = name;
  }

    generateRandomToken() {
    // Generate a random token using the crypto API
    const randomBytes = new Uint8Array(16);
    crypto.getRandomValues(randomBytes);

    // Convert the random bytes to a hexadecimal string
    const token = Array.from(randomBytes)
        .map(byte => byte.toString(16).padStart(2, '0'))
        .join('');

    // Insert dashes at specific positions to match the desired format
    return `${token.substr(0, 8)}-${token.substr(8, 4)}-${token.substr(12, 4)}-${token.substr(12, 4)}-${token.substr(20)}`;
    }
    authToken() {
       var Bearer = this.generateRandomToken();
        return Bearer;
    }
    greet() {
        console.log(`Hello, ${this.name}!`);
    }
}

// Export the class so it can be imported in other files
export default auth;
