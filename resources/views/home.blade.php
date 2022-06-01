@extends('layout.main')

@section('title','inicio')
    

@section('content')
<h1>Nuevos modelos</h1>
<hr>

<style>
    .slider-frame {
	width: 1135px;
    height: auto;
	margin:50px auto 0;
	overflow: hidden;
}

.slider-frame ul {
	display: flex;
	padding: 0;
	width: 400%;
	
	animation: slide 20s infinite alternate ease-in-out;
}

.slider-frame li {
	width: 100%;
	list-style: none;
}

.slider-frame img {
	width: 100%;
}



@keyframes slide {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

.secciones {
    width: 1200px;
    height: 400px;
    //background-color:gainsboro;
    display: flex;
    align-items: center;
    
}

.info-container {
    width: 300px;
    height: 350px;
    background-color:ghostwhite;
    display: inline-block;
    position: relative;
    left: 45px;
    margin: 25px;
    box-shadow: 3px 3px 10px rgba(0,0,0,0.5);
    cursor: default;
    transition: all 400ms ease;
}

.info-sections {
    width: 300px;
    height: 150px;
    display:grid;
    //background-color: aquamarine;
    padding: 25px;
    text-align: center;
    justify-content: center;
    align-items: center;

}

.info-container:hover {
    box-shadow: 5px 5px 20px rgba(0,0,0,0.10);
    transform: translateY(-10%);
}

.action {
   background-color:slategrey;
   color: aliceblue;
}

.redes {
    width: 1200px;
    height: 100px;
    //background-color:gainsboro;
    display: flex;
    justify-content:center;
    align-items: center;
    
}

.logos {
    margin: 15px;
    
    cursor: default;
    transition: all 400ms ease;
}

.logos:hover {
    
    transform: translateY(-10%);
}

.p1 {
    font-size: 3rem;
    color:gainsboro;
    position: absolute;
    top: 35%;
    left: 70%;
    transform: translate(-50%, -50%);
    text-shadow: 3rem;
}

.p2 {
    font-size: 5rem;
    color:gainsboro;
    position: absolute;
    top: 42%;
    left: 65%;
    transform: translate(-50%, -50%);
    text-shadow: 3rem;
    font-weight: bold;
}

.p3 {
    font-size: 3rem;
    color: gainsboro;
    position: absolute;
    top: 50%;
    left: 62%;
    transform: translate(-50%, -50%);
    text-shadow: 3rem;
}
</style>

<div class="slider-frame">
    <p class="p1">LOS MEJORES</p>
    <p class="p2">VEHICULOS</p>
    <p class="p3">PARA TU ESTILO</p>
    <ul>
        <li><img width="1135px" height="700px" src="https://f.vividscreen.info/soft/12ab56c2483c8cad6c16af5483894a72/Kia-Sportage-Drive-1920x1200.jpg" alt=""></li>
        <li><img width="1135px" height="700px" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/17995-2023-sportage-sx-1635358192.jpg?crop=0.730xw:0.546xh;0.119xw,0.332xh&resize=1200:*" alt=""></li>
        <li><img width="1135px" height="700px" src="https://www.mundoautomotorchile.com/wp-content/uploads/2021/11/new-ford-ranger-global-model_100816622_h-1024x682.jpg" alt=""></li>
        <li><img width="1135px" height="700px" src="https://www.autosymoda.mx/wp-content/uploads/2020/08/Chevrolet-Tracker-2021-2.jpg" alt=""></li>
    </ul>
</div>
    <hr>
        <h1>Nuestra vision</h1>
    <hr>
        <p>Ser una empresa especializada en la comercialización de coches nuevos, usados, repuestos, accesorios, mantenimiento preventivo 
            y correctivo y trabajos de carrocería y pintura. Contar con personal altamente cualificado, tecnología punta e infraestructura
            que garanticen siempre un servicio integral de máxima calidad. Cumplir con los estándares de las marca, normas ambientales y 
            del entorno social y trabajar por el bienestar y crecimiento de nuestro talento humano.</p>
    <hr>
        <h1>Nuestra mision</h1>
    <hr>
        <p>Nuestra misión está encaminada hacia la excelencia, es decir, hacia la total satisfacción del cliente, así como la de los
            profesionales que la integran, un comportamiento medioambiental respetuoso y la distinción del liderazgo.</p>
    <hr>
        <h2 style="text-align: center;">DESCUBRE</h2>
    <hr>

    <div class="secciones">
        <div class="info-container">
            <div>
                <img width="300px" height="200px" src="https://scontent.fuio10-1.fna.fbcdn.net/v/t1.6435-9/104477043_700840913807337_2417975981888030354_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=G0qzFXdBIBcAX8b0Jhn&_nc_ht=scontent.fuio10-1.fna&oh=00_AT8ff9g0KqtHYFBAjII6TOlREEpbJ0KlRLuDxiEX1zMecA&oe=62BAFE69">
            </div>
            <div class="info-sections">
                <p >Consulta el catalogo de automoviles aqui,
                    y escoge el ideal para ti.
                </p>
                
                <button style="font-weight: bold;" class="action">IR AL CATALOGO</button>
            </div>
        </div>
        <div class="info-container">
            <div>
                <img width="300px" height="200px" src="https://www.lubricantesenvenezuela.com/wp-content/uploads/2019/05/Los-autos-m%C3%A1s-vendidos-1024x512.jpg">
            </div>
            <div class="info-sections">
                <p >Autos mas vendidos por temporada.</p>
                <br>
                <button style="font-weight: bold;" class="action">MAS VENDIDOS</button>
            </div>
        </div>
        <div class="info-container">
            <div>
                <img width="300px" height="200px" src="https://www.motorfy.com/wp-content/uploads/2019/07/autofinanciamiento-3-1.jpg">
            </div>
            <div class="info-sections">
                <p >Consulta las opiniones de los clientes
                    acerca de un auto.
                </p>
                <br>
                <button style="font-weight: bold;" class="action">CONSULTAR OPINIONES</button>
            </div>
        </div>
    </div>
    <hr>
    <h3 style="text-align: center">Siguenos en nuestras redes sociales</h3>
    <hr>
    <div class="redes">
        <div class="logos">
            <img width="50px" height="50px" src="https://sistemasdeingenieria.com/img/logofacebook.png">
        </div>
        <div class="logos">
            <img width="50px" height="50px" src="https://seeklogo.com/images/I/instagram-logo-041EABACE1-seeklogo.com.png">
        </div>
        <div class="logos">
            <img width="50px" height="50px" src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-3.png">
        </div>
    </div>


@endsection()