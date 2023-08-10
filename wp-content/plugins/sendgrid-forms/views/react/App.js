import React from 'react';
import Dashboard from './components/Dashboard';
import Menu from "./components/Menu";
import ThemeEdit from "./components/ThemeEdit";

const App = () => {
    return (
        <div style={{
            paddingRight: '1rem',
        }}>
            <h2 className='app-title'>
                Theme Generator
            </h2>
            <p>Con este plugin podrás crear un tema de WordPress desde cero, con las características que desees.</p>
            <hr/>
            <div className="container-fluid">
                <div className="row">
                    <div className="col-12">
                        <Menu/>
                    </div>
                    <div className="col-12">
                        <ThemeEdit/>
                    </div>
                    <div className="col-12">
                        <Dashboard/>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default App;
