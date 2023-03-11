const firebaseConfig = {
    apiKey: "AIzaSyBECKfjMFJ5Kml9FF1F2PVXGi8O1nsYAhs",
    authDomain: "webdashboard-eecea.firebaseapp.com",
    projectId: "webdashboard-eecea",
    storageBucket: "webdashboard-eecea.appspot.com",
    messagingSenderId: "347419719757",
    appId: "1:347419719757:web:689dcd1c7cfb97bdeb8404",
    measurementId: "G-B8CY71NLQE",
    databaseURL: "webdashboard-eecea-default-rtdb.firebaseio.com"
};

//Default conffig
const app = firebase.initializeApp(firebaseConfig, 'main');
const defaultDb = firebase.database(app);
const databaseConfig = defaultDb.ref('databaseConfig');