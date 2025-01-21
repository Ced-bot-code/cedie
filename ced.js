function frac(x){
    return x - Math.floor(x)
}

function timer(x){
    A = Math.floor(x)
    B = 24*frac(x);
    C = 60*frac(B);
    D = 60*frac(C);
    return `${A}d${(Math.floor(B)).toString().padStart(2, 0)}h${(Math.floor(C)).toString().padStart(2, 0)}m${(Math.floor(D)).toString().padStart(2, 0)}s`
}

function celestialBody(p, c){
    td = new Date();
    tz = -td.getTimezoneOffset()/60;
    W = ''
    switch(p){
        case "Sun":
                W = SoMo.getSunDayInfo(new Date(), c.lat, c.long, 36E5*tz/6E4, "de")
            break;
            case "Moon":
                W = SoMo.getMoonDayInfo(new Date(), c.lat, c.long, 36E5*tz/6E4, "de")
            break;
    }
    return W
}

function celestialBodyLive(p, c){
    td = new Date();
    tz = -td.getTimezoneOffset()/60;
    W = ''
    switch(p){
        case "Sun":
                W = SoMo.getSunSecInfo(new Date(), c.lat, c.long, 36E5*tz/6E4, "de")
            break;
            case "Moon":
                W = SoMo.getMoonSecInfo(new Date(), c.lat, c.long, 36E5*tz/6E4, "de")
            break;
    }
    return W
}

var xt = '', SoMo = SoMo;

getData = async (f)=>{
    let qv = await fetch(f)

    displayInfo(await qv.json());
}