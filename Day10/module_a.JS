function show(){
    //document.write("show!");
    const div= document.createElement('div');
    div.textContent= "show!!";
    document.body.appendChild(div);
}

//외부에서 show함수를 import 하려면 이곳에서 export를 해줘야만 함.
//하나의 문서안에 export를 여러번 할 수 있지만 적어도 이 중 하나는 기본 export로 설정해야함.
export default show;

//여러개의 함수를 export를 하려면..
export function addElement(msg){
    const h3= document.createElement('h3');
    h3.textContent= msg;
    document.body.appendChild(h3);
}

//변수, 상수도 export 가능
export const num=100;
export let name="sam";

