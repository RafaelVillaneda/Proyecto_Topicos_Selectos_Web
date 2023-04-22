import './assets/estilos.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { CSSTransition, TransitionGroup } from 'react-transition-group';
import Landin from './components/landinPage';
import Login from './components/login';
import Registro from './components/registro';

function App() {
  return (
    <div className="App">
      <CSSTransition timeout={300}>
          <BrowserRouter>
            <Routes>
              <Route path='/' element={<Landin />} />
              <Route path='/login' element={<Login />} />
              <Route path='/registro' element={<Registro />} />
            </Routes>
          </BrowserRouter>
        </CSSTransition>

    </div>

  );
}

export default App;
