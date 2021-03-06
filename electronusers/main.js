//Aplicacioó general
const app = require('electron').app;
//Uso de las pantallas de sistema
const BrowserWindow=require('electron').BrowserWindow;
//Ruta de la carpeta base
const path=require('path');
//URL de las paginas
const url=require('url');

//ECMASCRIPT 6 - JS
let PantallaPrincipal;

function muestraPantallaPrincipal() {
	PantallaPrincipal= new BrowserWindow({width:628,height:825});
	PantallaPrincipal.loadURL(url.format({
		//join: concatenar cadenas
		pathname:path.join(__dirname,'index.html'),
		protocol: 'file',
		slashed: true
	}));
	// PantallaPrincipal.webContents.openDevTools();
	PantallaPrincipal.show();
}

app.on('ready',muestraPantallaPrincipal);