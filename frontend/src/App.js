import './assets/estilos.css';
import { BrowserRouter,Routes,Route } from 'react-router-dom';
import Landin from './components/landinPage';
import Login from './components/login';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<Landin/>} />
          <Route path='/login' element={<Login/>} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
