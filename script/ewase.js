let allPH = document.getElementsByClassName("ph");
let allTUR = document.getElementsByClassName("tur");
let avgs = document.getElementsByClassName("avg");
let allTDS = document.getElementsByClassName("tds");
let allEC = document.getElementsByClassName("ec");
let allTEMP = document.getElementsByClassName("temp");


for(i=0; i<allPH.length; i++)
{
    const nval = allPH[i].textContent;
    const val = Number(nval);

    if(val >= 6.5 && val <= 7.5)
    {
        allPH[i].style.color = "rgba(2, 57, 65, 0.904)";
    }
    else if((val >= 6 && val < 6.5) || (val > 7.5 && val <= 8))
    {
        allPH[i].style.color = "green";
    }
    else if(val < 6)
    {
        allPH[i].style.color = "orange";
    }
    else
    {
        allPH[i].style.color = "red";
    }
}

for(i=0; i<allTUR.length; i++)
{
    const nval = allTUR[i].textContent;
    const val = Number(nval);

    if(val >= 0 && val <= 1)
    {
        allTUR[i].style.color = "rgba(2, 57, 65, 0.904)";
    }
    else if((val > 1 && val <= 5))
    {
        allTUR[i].style.color = "green";
    }
    else if(val > 5 && val <= 10)
    {
        allTUR[i].style.color = "orange";
    }
    else if(val > 10 && val <= 25)
    {
        allTUR[i].style.color = "brown";
    }
    else
    {
        allTUR[i].style.color = "rgba(53, 28, 0, 0.932)";
    }
}

for(i=0; i<avgs.length; i++)
{
    avgs[i].textContent = Number(avgs[i].textContent).toFixed(2);
    // let nval = avgs[i].textContent;
    // let val = Number(nval);
    // const n = val.toFixed(2);
    // avgs[i].textContent = n;
    
}

for(i=0; i<allTDS.length; i++)
{
    const nval = allTDS[i].textContent;
    const val = Number(nval);

    if(val >= 0 && val <= 50)
    {
        allTDS[i].style.color = "whitesmoke";
    }
    else if((val > 50 && val <= 100))
    {
        allTDS[i].style.color = "skyblue";
    }
    else if(val > 100 && val <= 200)
    {
        allTDS[i].style.color = "darkblue";
    }
    else if(val > 200 && val <= 300)
    {
        allTDS[i].style.color = "purple";
    }
    else if(val > 300 && val <= 400)
    {
        allTDS[i].style.color = "green";
    }
    else if(val > 400 && val <= 500)
    {
        allTDS[i].style.color = "orange";
    }
    else
    {
        allTDS[i].style.color = "red";
    }
}

for(i=0; i<allEC.length; i++)
{
    const nval = allEC[i].textContent;
    const val = Number(nval);

    if(val >= 0 && val <= 50)
    {
        allEC[i].style.color = "whitesmoke";
    }
    else if((val > 50 && val <= 100))
    {
        allEC[i].style.color = "skyblue";
    }
    else if(val > 100 && val <= 200)
    {
        allEC[i].style.color = "darkblue";
    }
    else if(val > 200 && val <= 300)
    {
        allEC[i].style.color = "purple";
    }
    else if(val > 300 && val <= 400)
    {
        allEC[i].style.color = "green";
    }
    else if(val > 400 && val <= 500)
    {
        allEC[i].style.color = "orange";
    }
    else
    {
        allEC[i].style.color = "red";
    }
}

for(i=0; i<allTEMP.length; i++)
{
    allTEMP[i].style.color = "orange";
}