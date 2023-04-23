import React from 'react'
import Nav from './navBar'

const inicio = () => {
    return (
        <div>
            <Nav />
            <br /><br /><br />
            <div className='container'>
                <div className="text-center bg-info">
                    <h1 className="fw-bolder">Peliculas</h1>
                    <p className="lead mb-0">Panel de control</p>
                    <table className="table table-info table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Director</th>
                            <th scope="col">Año</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Operacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Titanic</td>
                            <td>James Cameron</td>
                            <td>1997</td>
                            <td>Ciencia Ficcion</td>
                            <td> 
                            <button type="button" className="btn btn-warning">Editar</button>
                            <button type="button" className="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                            <td>Titanic</td>
                            <td>James Cameron</td>
                            <td>1997</td>
                            <td>Ciencia Ficcion</td>
                            <td> 
                            <button type="button" className="btn btn-warning">Editar</button>
                            <button type="button" className="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                            <td>Titanic</td>
                            <td>James Cameron</td>
                            <td>1997</td>
                            <td>Ciencia Ficcion</td>
                            <td> 
                            <button type="button" className="btn btn-warning">Editar</button>
                            <button type="button" className="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                </div>
                
            </div>
        </div>
    )
}

export default inicio