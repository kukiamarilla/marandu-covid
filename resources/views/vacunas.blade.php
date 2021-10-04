@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center large highlight">Vacunas</h1>
    <p>Aquí encontrarás información acerca de las diferentes vacunas traídas por el ministerio de salud de nuestro país, para ser aplicadas a nuestros habitantes.</p>
    <div class="vacunas-list">
        <div class="vacuna left">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_b05556396f5646cb90aec4ab37251ecd~mv2.jpg/v1/fill/w_514,h_420,al_c,q_80,usm_0.66_1.00_0.01/0c505f_b05556396f5646cb90aec4ab37251ecd~mv2.webp" alt="Pfizer">
            </div>
            <div class="description">
                <h1>Pfizer</h1>
                <p>
                    Origen: Estados Unidos y Alemania<br/>
                    ARNm<br/>
                    2 Dosis<br/>
                    Efectividad: 94.7%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna right">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_7db4d221f3c04e468f93f5a68e526687~mv2.jpg/v1/fill/w_630,h_420,al_c,q_80,usm_0.66_1.00_0.01/astrazeneca.webp" alt="AstraZeneca">
            </div>
            <div class="description">
                <h1>AstraZeneca</h1>
                <p>
                    Origen: Reino Unido<br/>
                    Vector Viral<br/>
                    2 Dosis<br/>
                    Efectividad: 70%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna left">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_d75b4a52d98843f5a2dbcb22ec09567e~mv2.png/v1/fill/w_630,h_420,al_c,q_85,usm_0.66_1.00_0.01/Screenshot%20(3).webp" alt="CoronaVac">
            </div>
            <div class="description">
                <h1>CoronaVac</h1>
                <p>
                    Origen: China<br/>
                    Vector inactivo<br/>
                    2 Dosis<br/>
                    Efectividad: 80%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna right">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_7aad647167c641f58272012c382d8df8~mv2.jpg/v1/fill/w_420,h_420,al_c,q_80,usm_0.66_1.00_0.01/moderna.webp" alt="Moderna">
            </div>
            <div class="description">
                <h1>Moderna</h1>
                <p>
                    Origen: Estados Unidos<br/>
                    ARNm<br/>
                    2 Dosis<br/>
                    Efectividad: 94%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna left">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_c318b51ca5634603ae85378575f739a2~mv2.jpg/v1/fill/w_630,h_420,al_c,q_80,usm_0.66_1.00_0.01/sputnikv.webp" alt="Sputnik V">
            </div>
            <div class="description">
                <h1>Sputnik V</h1>
                <p>
                    Origen: Rusia<br/>
                    Vector adenoviral<br/>
                    2 Dosis<br/>
                    Efectividad: 97.6%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna right">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_88db84a589e641af9485086fb580e3d4~mv2.jpg/v1/crop/x_52,y_0,w_462,h_328/fill/w_590,h_420,al_c,lg_1,q_80/sinopharm.webp" alt="Sinopharm">
            </div>
            <div class="description">
                <h1>Sinopharm</h1>
                <p>
                    Origen: China<br/>
                    Virus Inactivo<br/>
                    2 Dosis<br/>
                    Efectividad: 78.1%<br/>
                </p>
            </div>
        </div>
        <div class="vacuna left">
            <div class="image-container">
                <img src="https://static.wixstatic.com/media/0c505f_24bb66c2faba4f5c88cf2851930fe626~mv2.jpg/v1/fill/w_363,h_271,al_c,lg_1,q_80/covaxin.webp" alt="Covaxin">
            </div>
            <div class="description">
                <h1>Covaxin</h1>
                <p>
                    Origen: India<br/>
                    Virus Inactivo<br/>
                    2 Dosis<br/>
                    Efectividad: 81%<br/>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
