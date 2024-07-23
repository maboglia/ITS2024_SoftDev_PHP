const URL="http://localhost/cartellaPHP/10esercitazione/popolazione/controller/ControllerPopolazioneRest.php?action=";

const TENDINAREGIONI=document.createElement("select");
const TENDINACOMUNI=document.createElement("select");

TENDINAREGIONI.append("<option>Scegli una Regione!</option>")
fetch(URL+"regioni")
    .then(res=>res.json())
    .then(regioni=>{
        for (const regione of regioni) {

            const option=document.createElement("option");
            option.value=regione;
            option.textContent=regione;
            TENDINAREGIONI.append(option);
            
            
        }
    })
    TENDINAREGIONI.addEventListener("change",cambia)
    TENDINACOMUNI.addEventListener("change",cambiaComune)

    function cambia(){
        
        fetch(URL+"comuni&regione="+TENDINAREGIONI.value)
            .then(res=>res.json())
            .then(comuni=>{
                TENDINACOMUNI.innerHTML="";
                for (const comune of comuni) {

                    const option=document.createElement("option");
                    option.value=comune;
                    option.textContent=comune;
                    TENDINACOMUNI.append(option);
                    
                }
            })
    }
    function cambiaComune(){
        
        fetch(URL+"comune&comune="+TENDINACOMUNI.value)
            .then(res=>res.json())
            .then(comune=>{
                const DIV=document.createElement("div");
                DIV.setAttribute("style","border:1px solid blue; width:100%;padding: 2em; font-size : 1.5em")
                DIV.textContent=`Il comune selezionato è ${comune.comune} \nMaschi: ${comune.maschi}\nFemmine: ${comune.femmine}`
                document.body.append(DIV);
            })

    }

document.body.appendChild(TENDINAREGIONI);


document.body.appendChild(TENDINACOMUNI);
