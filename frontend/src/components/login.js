import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import axios from 'axios';


const api='http://localhost:8000/api/usuario/';
//http://localhost:8000/api/usuario/1/1
const Login = () => {
  const [correo, setCorreo] = useState('');
  const [contraseña, setContraseña] = useState('')
  const navigate = useNavigate();
  
  const iniciarSeccion = async (e) => {
    e.preventDefault();
    console.log(correo)
    console.log(contraseña)
    try {
      const response = await axios.get(api+correo+'/'+contraseña);
      //console.log(api+correo+'/'+contraseña);
      // Si la API devuelve un usuario, redirige a la vista correspondiente
      window.location.href='http://127.0.0.1:8000'
    } catch (error) {
      // Si la API devuelve un error, muestra un mensaje y no carga ninguna vista
      alert('Tu correo o contraseña no estan correctos');
      console.log(error.response.data.error);
    }
   
    /*
    await axios.get(api,
        {
            email:correo,
        });
    */
    //navigate('/inicio');
  }

  return (
    <div className="container">
      <div className="row justify-content-center mt-5">
        <div className="col-lg-6">
          <div className="card bg-dark text-white">
            <div className="card-header">
              <h3 className="text-center">Inicio de Sesión</h3>
            </div>
            <div className="card-body">
              <form onSubmit={iniciarSeccion}>
                <div className="mb-3">
                  <label htmlFor="exampleInputEmail1" className="form-label">Correo electrónico</label>
                  <input type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" onChange={(e) => setCorreo(e.target.value)} />
                  <div id="emailHelp" className="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div className="mb-3">
                  <label htmlFor="exampleInputPassword1" className="form-label">Contraseña</label>
                  <input type="password" className="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" onChange={(e) => setContraseña(e.target.value)} />
                </div>
                <button type="submit" className="btn btn-danger w-100">Iniciar Sesión</button>
              </form>
            </div>
            <div className="card-footer text-center bg-dark">
              ¿No tiene una cuenta? <Link to='/registro' className="text-danger">Regístrese aquí</Link>
              <br /> <br />
              ¿Quieres volver a la página principal? <Link to='/' className="text-danger">Toca aquí!</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Login;
