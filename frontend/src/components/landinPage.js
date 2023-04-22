import React from 'react'

const landinPage = () => {
  return (
<div>
        
  <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
    <div className="container-fluid">
      <a className="navbar-brand" href="#">Guevana!</a>
      <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
      </button>
      <div className="collapse navbar-collapse" id="navbarNav">
        <ul className="navbar-nav">
          <li className="nav-item">
            <a className="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href="#">Películas</a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href="#">Series</a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href='#'>Quieres unirte?</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <header className="bg-light py-5">
    <div className="container">
      <div className="row">
        <div className="col-lg-8 col-md-10 mx-auto">
          <div className="text-center">
            <h1 className="fw-bolder">Películas en alta definición</h1>
            <p className="lead mb-0">Las mejores películas en calidad HD. ¡Disfrútalas desde la comodidad de tu hogar!</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section className="py-5">
    <div className="container">
      <h2 className="text-center mb-5">Películas populares</h2>
      <div className="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div className="col">
          <div className="card h-100">
            <img src="https://via.placeholder.com/300x450.png?text=Movie+Poster" className="card-img-top" alt="..."/>
            <div className="card-body">
              <h5 className="card-title">Avatar</h5>
              <p className="card-text">Avatar es una franquicia de medios estadounidense creada por James Cameron,
                que consiste en una serie planificada de
                películas épicas de ciencia ficción producidas por Lightstorm Entertainment y distribuidas por 20th
                Century Studios</p>
              <a href="#" className="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        

        <div className="col">
          <div className="card h-100">
            <img src="https://via.placeholder.com/300x450.png?text=Movie+Poster" className="card-img-top" alt="..."/>
            <div className="card-body">
              <h5 className="card-title">Star Wars: episodio IV - una nueva esperanza</h5>
              <p className="card-text">La nave en la que viaja la princesa Leia es capturada por las tropas imperiales
                al mando del temible Darth Vader. Antes de ser atrapada,
                Leia consigue introducir un mensaje en su robot R2-D2, quien acompañado
                de su inseparable C-3PO logra escapar.</p>
              <a href="#" className="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>

        <div className="col">
          <div className="card h-100">
            <img src="https://via.placeholder.com/300x450.png?text=Movie+Poster" className="card-img-top" alt="..."/>
            <div className="card-body">
              <h5 className="card-title">Coraline</h5>
              <p className="card-text">Coraline Jones: es la protagonista de la película; es una niña rígida,
                fuerte de carácter y clara al hablar. Tiene 11 años de edad.
                ​ Se muda a una casa compartida por otras personas llamada
                "El Palacio Rosa", junto a sus padres.</p>
              <a href="#" className="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>

        <div className="col">
          <div className="card h-100">
            <img src="https://via.placeholder.com/300x450.png?text=Movie+Poster" className="card-img-top" alt="..."/>
            <div className="card-body">
              <h5 className="card-title">El increíble castillo vagabundo</h5>
              <p className="card-text">Sophie es una adolescente que trabaja en una tienda de sombreros en un pueblo como
                muchos,
                pero su vida da un giro total cuando una bruja la transforma en una anciana.</p>
              <a href="#" className="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  

  <footer className="bg-light py-3">
    <div className="container">
      <div className="row">
        <div className="col-md-6 text-center text-md-start">
          <p>&copy; 2023 Mi sitio web. Todos los derechos reservados.</p>
        </div>
        <div className="col-md-6 text-center text-md-end">
          <p>Desarrollado por <a href="https://github.com/RafaelVillaneda">Rafael Eulalio Villaneda de la torre</a></p>
        </div>
      </div>
    </div>
  </footer>
        
    </div>
  )
}

export default landinPage