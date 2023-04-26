import './assets/estilos.css'
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { CSSTransition, TransitionGroup } from 'react-transition-group';
import Landin from './components/landinPage';
import Login from './components/login';
import Registro from './components/Registro';
import Inicio from './components/mostrarPeliculas';
import NotFoundPage from './components/NotFoundPage';
function App() {
  return (
    <div className="App">
      <CSSTransition timeout={300}>
          <BrowserRouter>
            <Routes>
              <Route path='/' element={<Landin />} />
              <Route path='/login' element={<Login />} />
              <Route path='/registro' element={<Registro />} />
              <Route path='/inicio' element={<Inicio />} />
              <Route path="*" element={<NotFoundPage/>}/>
            </Routes>
          </BrowserRouter>
        </CSSTransition>

    </div>

  );
}

export default App;
