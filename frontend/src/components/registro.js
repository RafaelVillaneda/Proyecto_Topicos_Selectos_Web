import React from 'react'
import { Link } from 'react-router-dom';
const registro = () => {
  return (
    
    
    <div className="container">
      <div className="row justify-content-center mt-5">
        <div className="col-lg-6">
          <div className="card">
            <div className="card-header">
              <h3 className="text-center">Regsitro de usuario</h3>
            </div>
            <div className="card-body">
              <form>
                <div className="mb-3">
                  <label for="exampleInputEmail1" className="form-label">Correo electrónico</label>
                  <input type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" />
                  <div id="emailHelp" className="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div className="mb-3">
                  <label for="exampleInputPassword1" className="form-label">Contraseña</label>
                  <input type="password" className="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" />
                </div>
                <div className="mb-3">
                  <label for="exampleInputPassword1" className="form-label">Confirma tu contraseña</label>
                  <input type="password" className="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" />
                </div>
                <button type="submit" className="btn btn-primary w-100">Iniciar Sesión</button>
              </form>
            </div>
            <div className="card-footer text-center">
              Ya tienes una cuenta? <Link to='/login'>Inicia sección aqui!</Link>
              <br/> <br/>
              Oh bien ¿quieres volver a la pagina principal?<Link to='/'>Toca aqui!</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default registro