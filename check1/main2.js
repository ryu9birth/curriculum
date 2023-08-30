class Car {
    constructor(gas, num){
        this.gas = gas;
        this.num = num;
    }
getNumGas(){
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です。`);
}
}
let track = new Car('diesel',2222);
track.getNumGas();