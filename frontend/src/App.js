import './App.css';
import { BrowserRouter,Routes,Route } from 'react-router-dom';
import Landin from './components/landinPage';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<Landin/>} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
