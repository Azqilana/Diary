const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function(){
     nav.classList.toggle('slide');
});



const object1 = { one: "React.js" };
const object2 = { two: "Next.js" };

const newObject = Object.assign(object1, object2);

newObject["one"] = "Laravel";
newObject["two"] = "Node.js";

console.log(newObject);
