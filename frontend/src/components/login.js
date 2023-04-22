import React from 'react'
import '../assets/login_css.css';


const login = () => {



  return (
    <div className="login">
      <h1>Login</h1>
      <form method="post">
        <input type="email" name="u" placeholder="Correo" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" className="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
    </div>
  )
}

export default login