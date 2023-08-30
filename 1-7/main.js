class Taiyaki {
    constructor(name){
          this.name = name;
    }
    in(){
        console.log(`中身は${this.name}です`)
    }
}
let annko = new Taiyaki('あんこ');
annko.in();
let cream = new Taiyaki('クリーム');
cream.in();
let cheese = new Taiyaki('チーズ');
cheese.in();