
class auth {
  
  constructor(UserEmail) {
    this.UserEmail = UserEmail;
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
    return this.generateRandomToken();
  }

  logout() {
    let xhr, get_init, obj;
    xhr = new XMLHttpRequest();
      xhr.open('POST', root_url + 'auth/logout');
      xhr.setRequestHeader('Authorization', 'Bearer ' + tsrpc);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          get_init = xhr.response;
          obj = JSON.parse(get_init).data;
          if (obj.status === 200) {
              window.location = root_url; 
          }
          return false;
        }
      }
    xhr.send();
  }

  regex = () =>{
    const ValidateEmailFilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    const emailBlockReg = /^([\w-\.]+@(?!uk.com)(?!sail.com)([\w-]+\.)+[\w-]{2,4})?$/;
    if (!ValidateEmailFilter.test(this.UserEmail)){
      return 303;
    }else  if (!emailBlockReg.test(this.UserEmail)){
      return  401;
    }else {
      return 200;
    }
  }







}



// Export the class, so it can be imported in other files
export default auth;
