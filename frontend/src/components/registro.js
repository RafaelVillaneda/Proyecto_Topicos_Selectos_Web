import React, { useState } from 'react';
import { Link} from 'react-router-dom';

const Registro = () => {
  const [correo, setCorreo] = useState('');
  const [contraseña, setContraseña] = useState('')
  const [contraseña2, setContraseña2] = useState('');
  
  const Registro = async () => {
    //e.preventDefault();
    console.log(correo)
    console.log(contraseña)
  }
  const validarContraseñas = () => {
    console.log(contraseña)
    console.log(contraseña2)
    if (contraseña !== contraseña2) {
      alert('Las contraseñas no coinciden');
      return false;
    }
    return true;
  }

  return (
    <div className="container">
      <div className="row justify-content-center mt-5">
        <div className="col-lg-6">
          <div className="card bg-dark text-white">
            <div className="card-header">
              <h3 className="text-center">Registro</h3>
            </div>
            <div className="card-body">
              <form onSubmit={
              (e) => {
                e.preventDefault();
                if (validarContraseñas()==true) {
                  Registro();
                }
              }}
              >
                <div className="mb-3">
                  <label htmlFor="exampleInputEmail1" className="form-label">Correo electrónico</label>
                  <input required type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" onChange={(e) => setCorreo(e.target.value)} />
                  <div id="emailHelp" className="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div className="mb-3">
                  <label htmlFor="exampleInputPassword1" className="form-label">Contraseña</label>
                  <input required type="password" className="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" onChange={(e) => setContraseña(e.target.value)} />
                </div>
                <div className="mb-3">
                  <label htmlFor="exampleInputPassword1" className="form-label">Confirma tu contraseña</label>
                  <input required type="password" className="form-control" id="contraseña2" placeholder="Ingrese su contraseña" onChange={(e) => setContraseña2(e.target.value)}/>
                </div>
                <button type="submit" className="btn btn-danger w-100">Registrarse</button>
              </form>
            </div>
            <div className="card-footer text-center bg-dark">
              ¿Ya tienes una cuenta? <Link to='/login' className="text-danger">Inicia aquí</Link>
              <br /> <br />
              ¿Quieres volver a la página principal? <Link to='/' className="text-danger">Toca aquí!</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Registro