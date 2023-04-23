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
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
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