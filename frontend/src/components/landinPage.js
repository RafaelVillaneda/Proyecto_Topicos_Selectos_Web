import React from 'react'
import { Link } from 'react-router-dom'
import logo_ann from '../assets/Ann.png'
import logo_buggeman from '../assets/bugeman.png'
import logo_carrusel from '../assets/carrusel1.jpg'
import logo_desc from '../assets/desc.png'
import logo_descargar from '../assets/descargar.jpeg'
import logo_floter from '../assets/FLOTER.jpg'
import logo_floter2 from '../assets/FLOTER.png'
import logo_ib from '../assets/ib.png'
import logo_ib2 from '../assets/ib2.jpg'
import logo_logo from '../assets/logo.png'
import logo_mid from '../assets/Midnight Train.jpeg'
import logo_modeko from '../assets/mogeko.png'
import logo_terapia from '../assets/Terapia con el Dr. Albert Krueger.png'
import logo_theGray from '../assets/The Gray Garden.png'
import logo_Wicth from "../assets/Witch's Heart.png"


const landinPage = () => {
  return (
    <div>
      <nav id="header" className="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">
            <img src={logo_logo} className="rounded" alt="logo" width="50px" height="50px" />
            Horror Games</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
              <li className="nav-item">
                <a className="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" aria-current="page" href="#juegos">Ultimos juegos añadidos</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" aria-current="page" href="#mas_desc">Lo mas decargado</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" aria-current="page" href="#comentarios">Comentarios</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" aria-current="page" href="#descargasRTP">Enlaces RTP</a>
              </li>
              <li className="nav-item dropdown">
                <a className="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Generos
                </a>
                <ul className="dropdown-menu">
                  <li><a className="dropdown-item" href="#">Horror</a></li>
                  <li><a className="dropdown-item" href="#">Surreal</a></li>
                  <li><a className="dropdown-item" href="#">Survival Horror</a></li>
                  <li><a className="dropdown-item" href="#">Psicológico</a></li>
                  <li><a className="dropdown-item" href="#">Comedia</a></li>
                  <li><a className="dropdown-item" href="#">Aventura</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <main id="main">
        <div className="container-fluid">
          <div id="carrusel" className="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div className="carousel-inner">
              <div className="carousel-item active">
                <img src={logo_carrusel} className="d-block w-100" alt="Carrusel" />
              </div>

              <div className="overlay">
                <div className="container">
                  <div className="row align-items-center">
                    <div className="col-md-6 offset-md-6 text-center text-end mt-4">
                      <h2>Horro Games</h2>
                      <br />
                      <p className="d-none d-md-block">
                        Aquí encontraras un sin fin de juegos traducidos al español espero
                        que disfrutes las aportaciones de la comunidad.
                      </p>
                      <a href="#" className="btn btn-outline-light mt-2" role="button">Quiero aportar
                        traducciones</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <section id="juegos" className="mt-4 mt-4">
          <div className="col text-center text-uppercase">
            <h3>Conoce nuestros ultimos juegos añadidos</h3>
            <hr />
          </div>
          <div className="container">

            <div className="row align-items-center" id="tarjetas">

              <div className="col-6">                           
                <div className="card mb-3 border-danger " style={{maxWidth:"550px",maxHeight:"700px"}}>
                  <img src={logo_ib} className="card-img-top" alt="IB" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">Remake IB 2022</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-success">Horror</span>
                      <span className="badge bg-warning">Survival</span>
                    </div>
                    <p className="card-text" />
                    Una niña llamada Ib visita una galería de arte con sus padres.
                    Mientras observa las distintas obras de arte, Ib se da cuenta de repente de que está
                    sola.
                    Mientras busca a alguien, a cualquier persona, el museo empieza a cambiar...
                    <a className="btn btn-primary align-center">Ver mas</a>

                  </div>
                </div>
              </div>
              <div className="col-6">
                <div className="card mb-3 border-danger " style={{maxWidth:"550px",maxHeight:"700px;"}}>
                  <img src={logo_buggeman} className="card-img-top" alt="bugeman" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">The Boogie Man</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-success">Horror</span>
                      <span className="badge bg-warning">Survival</span>
                    </div>
                    <p className="card-text">
                      Keith Baring es un detective frío y dedicado a su trabajo,
                      cuyo jefe decide otorgarle algunos días libres. Junto a su esposa Helena,
                      emprenderá un viaje turístico a un antiguo castillo, en donde las maravillas del paisaje y la
                      historia que guardan aquellas paredes conformarán un destino inesperado...
                    </p>
                    <a className="btn btn-primary align-center">Ver mas</a>
                  </div>
                </div>
              </div>
              <div className="col-6">
                <div className="card mb-3 border-danger " style={{maxWidth:"550px", maxHeight:"700px"}}>
                  <img src={logo_modeko} className="card-img-top" alt="bugeman" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">Mogeko Castle</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-success">Horror</span>
                      <span className="badge bg-primary">Surreal</span>
                    </div>
                    <p className="card-text">
                      Yonaka Kurai es una chica normal de preparatoria que siempre
                      toma el tren para regresar a casa. Esta vez estaba regresando
                      temprano a casa por que era el día en que su hermano regresaba.
                    </p>
                    <a className="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>

              <div className="col-6">           
                <div className="card mb-3 border-danger " style={{maxWidth:"550px",maxHeight:"700px"}}>
                  <img src={logo_theGray} className="card-img-top" alt="The Gray Garden" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">El Jardín Gris/The Gray Garden</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-info">Aventura</span>
                      <span className="badge bg-primary">Comedia</span>
                    </div>
                    <p className="card-text">
                      Tras una terrible guerra entre ángeles y demonios, ambos bandos terminan
                      llegando a un acuerdo para poder co-existir
                      en paz y armonía. Pasa el tiempo y ahora ángeles y demonios conviven juntos.
                    </p>
                    <a className="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
              <div className="col-6">
                <div className="card mb-3 border-danger " style={{maxWidth:"550px",maxHeight:"700px"}}>
                  <img src={logo_Wicth} className="card-img-top" alt="Witch's Heart" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">Witch's Heart</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-success">Horror</span>
                      <span className="badge bg-info">Aventura</span>
                    </div>
                    <p className="card-text">
                      Mientras jugaba en las montañas, Claire Elford termina
                      refugiándose de la lluvia en una mansión. Pronto, se da cuenta de que
                      hay otras cuatro personas, monstruos extraños - y que no puede salir. En
                      compañía de demonios, los cinco deben descubrir cómo escapar… y
                      resolver el misterio del legendario tesoro que cumple deseos, el Corazón
                      de Bruja.
                    </p>
                    <a className="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
              <div className="col-6">
                <div className="card mb-3 border-danger " style={{maxWidth:"550px",maxHeight:"700px"}}>
                  <img src={logo_mid} className="card-img-top" alt="Midnight Train" width="640" height="360" />
                  <div className="card-body">
                    <h5 className="card-title">Midnight Train</h5>
                    <div className="badges pb-3">
                      <span className="badge bg-success">Horror</span>
                      <span className="badge bg-info">Aventura</span>
                    </div>
                    <p className="card-text">
                      Luna es una viajera que está buscando cierto lugar. De repente, mientras viaja en tren, las personas a su alrededor
                      desaparecen y el tren se detiene en un misterioso lugar. Ahí encuentra un reloj de bolsillo junto a unas instrucciones;
                      debe encontrar el siguiente tren antes de que se agote el tiempo o se quedará atrapada para siempre.
                    </p>
                    <a className="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
              <div>
              </div>
            </div>
          </div>


        </section>

        <section id="mas_desc" className="mt-4 mt-4">
          <h2 className="text-center">Top 4 juegos mas descargados!</h2>
          <div className="container">
            <hr className="text-light" />
            <div className="row align-items-center">

              <div className="col-6">
                <div className="card mb-3 border-warning border border-4" >
                  <div className="row g-0">
                    <div className="col-md-4">
                      <img src={logo_ib2} className="card-img" alt="img_ib" style={{maxWidth:"150%",maxHeight:"150%"}} />
                    </div>
                    <div className="col-md-8">
                      <div className="card-body">
                        <h5 className="card-title">Remake IB 2022</h5>
                        <p className="card-text ">Se nos presenta un remake del primer juego con modificaciones muy interesantes</p>
                        <button type="button" className="btn btn-primary">Saber más</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-6">
                <div className="card mb-3 border-warning border border-4" >
                  <div className="row g-0">
                    <div className="col-md-4">
                      <img src={logo_desc} className="card-img" alt="img_ib" style={{maxWidth:"150%",maxHeight:"150%"}} />
                    </div>
                    <div className="col-md-8">
                      <div className="card-body">
                        <h5 className="card-title">Terapia con el Dr. Albert Krueger</h5>
                        <p className="card-text ">El genio del Dr. Krueger vuelve a brillar con sus nuevas y revolucionarias sesiones terapéuticas. Permita que el nuevo tratamiento ... </p>
                        <button type="button" className="btn btn-primary">Saber más</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-6">
                <div className="card mb-3 border-warning border border-4" >
                  <div className="row g-0">
                    <div className="col-md-4">
                      <img src={logo_ann} className="card-img" alt="img_ib" style={{maxWidth:"150%",maxHeight:"150%"}} />
                    </div>
                    <div className="col-md-8">
                      <div className="card-body">
                        <h5 className="card-title">Remake IB 2022</h5>
                        <p className="card-text ">Ann, una estudiante de arte, se encuentra atrapada en la academia cuando accidentalmente rompió una de las reglas de la academia...</p>
                        <button type="button" className="btn btn-primary">Saber más</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-6">
                <div className="card mb-3 border-warning border border-4" >
                  <div className="row g-0">
                    <div className="col-md-4">
                      <img src="https://1.bp.blogspot.com/-PP94p-x03PU/YH9YJuBFs8I/AAAAAAAAR1o/m96XGHDFEKEc3He5NNDNxJmWF_Ess6BCACLcBGAsYHQ/s580/dsds.gif" className="card-img" alt="img_ib" style={{maxWidth:"150%",maxHeight:"150%"}} />
                    </div>
                    <div className="col-md-8">
                      <div className="card-body">
                        <h5 className="card-title">OMORI</h5>
                        <p className="card-text ">Se trata de un videojuego del género terror psicológico y surrealista que explora temas como la ansiedad, la depresión y el trauma.</p>
                        <button type="button" className="btn btn-primary">Saber más</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




            </div>


          </div>
        </section>

        <section id="comentarios" className="mt-4 mt-4">
          <h4 className="text-center">Comentarios de la comunidad</h4>
          <div className="container">
            <div className="row align-items-center">
              <div className="col-6">
                <div className="card" style={{width:"500px"}}>
                  <img className="card-img-top" src={logo_ann} alt="Card image" />
                  <div className="card-img-overlay">
                    <h4 className="card-title">Junkay</h4>

                    <p className="card-text">Buenos juegos con historias interesantes.</p>
                  </div>
                </div>
              </div>

              <div className="col-6">
                <div className="card" style={{width:"500px"}}>
                  <img className="card-img-top" src={logo_floter} alt="Card image" />
                  <div className="card-img-overlay">
                    <h4 className="card-title">LucyTrap</h4>

                    <p className="card-text">Donde estuvo esta pagina toda mi vida!!</p>
                  </div>
                </div>
              </div>
              <br /><br /><br /><br />
              <hr className="text-light" />
              <br /><br /><br /><br />
              <div className="col-12 col-center">
                <div className="card" style={{width:"500px"}}>
                  <img className="card-img-top" src={logo_ib2} alt="Card image" />
                  <div className="card-img-overlay">
                    <h4 className="card-title">Don precioso</h4>
                    <br /><br /><br /><br />
                    <p className="card-text">Exelentes juegos de calidad publicados aqui libre de cualquier virus o cosas por el estilo recomendado 100%</p>
                  </div>
                </div>
              </div>

            </div>


          </div>
        </section>

        <section className="mt-4 mt-4">

          <div id="descargasRTP" className="container mt-4 mt-4">
            <h1 className="text-center">Descargas RTP</h1>
            <div className="container-fluid">
              <div className="row">
                <div className="col-12 col-md-6 ps-0 pe-0">
                  <div style={{width:"100%",height:"0",paddingBottom:"154%",position:"relative"}}><iframe src="https://giphy.com/embed/1yld7nW3oQ2IyRubUm" width="100%" height="100%" style={{position:"absolute"}} frameBorder="0" className="giphy-embed" allowFullScreen></iframe></div><p></p>
                </div>
                <div className="col-12 col-md-6 ps-3 pe-3 pt-4 pb-4">
                  <h3>¿Qué son los RTP?</h3>
                  <p>Los RTP (Runtime Package) son paquetes con contenido de los RPG Makers estos incluyen gráficas, sonidos y
                    otros archivos necesarios para los juegos. Los RTP son necesarios para hacer correr los juegos,
                    ya que normalmente al crear un juego, se utilizan muchos de los archivos que incluye este paquete (RTP).
                  </p>
                  <h3>Descargas</h3>
                  <hr className="text-light" />
                  <a className="">RPG maker VX Ace <b>RTP</b> </a>
                  <hr className="text-light" />
                  <a className="">RPG maker VX  <b>RTP</b> </a>
                  <hr className="text-light" />
                  <a className="">RPG maker XP <b>RTP</b> </a>
                  <hr className="text-light" />
                  <a className="">RPG maker 2000 <b>RTP</b> </a>
                  <hr className="text-light" />
                  <a className="">RPG maker 2003 <b>RTP</b> </a>
                  <hr className="text-light" />
                  <a className="">RPG Tkool XP <b>RTP</b> </a>
                  <hr className="text-light"/>
                    <a className="">RPG Tkool 2000 <b>RTP</b> </a>
                    <hr className="text-light" />
                    <img src={logo_desc}/>
                </div>
              </div>
            </div>
          </div>
        </section>



      </main>
      <hr className="text-light" />         

      <footer id="footer" className="pb-4 pt-4 text-light" style={{backgroundImage:logo_ann}}>
        <div className="row text-center">
          <div className="col pb-2 pt-4">
            <img src={logo_logo} className="rounded" alt="Logo ITSJ" width="120px" height="120px" />
          </div>
        </div>

        <div className="row text-center">
          <div className="col pb-2 pt-4">
            <p>Copyright &copy; 2023 Horror Games</p>

          </div>
        </div>

      </footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
    </div>

  )
}

export default landinPage