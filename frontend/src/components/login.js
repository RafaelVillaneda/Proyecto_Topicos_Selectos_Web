import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';

const Login = () => {
  const [correo, setCorreo] = useState('');
  const [contraseña, setContraseña]=useState('')
  const navigate = useNavigate();
  const iniciarSeccion = async (e) =>{
    e.preventDefault();
    console.log(correo)
    console.log(contraseña)
    /*
    await axios.post(api,
        {
            description:description,
            price:price,
            stock:stock
        })
    */
    navigate('/');
}

  return (
    <div className="container">
      <div className="row justify-content-center mt-5">
        <div className="col-lg-6">
          <div className="card">
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
                <button type="submit" className="btn btn-primary w-100">Iniciar Sesión</button>
              </form>
            </div>
            <div className="card-footer text-center">
              ¿No tiene una cuenta? <Link to='/registro'>Regístrese aquí</Link>
              <br/> <br/>
              Oh bien ¿quieres volver a la pagina principal?<Link to='/'>Toca aqui!</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Login;
