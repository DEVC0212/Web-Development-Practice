function pieces(fruit){
    return fruit * 4;
}
function fruit(apples , mangoes){
    const a = pieces(apples);
    const b = pieces(mangoes);

    const c = `The juice is of ${a} apples and ${b} mangoes!`
    return c;
}
console.log(fruit(3,4));