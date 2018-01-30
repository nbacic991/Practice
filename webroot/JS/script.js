/**
 * Change Value
 * @type {HTMLElement | null}
 */
// var checklist = document.getElementById("checklist");
// var items = checklist.querySelectorAll("li");
// var inputs = checklist.querySelectorAll("input");
//
// for(var i = 0; i < items.length; i++) {
//     items[i].addEventListener("click", editItem);
//     inputs[i].addEventListener("blur", updateItem);
//     inputs[i].addEventListener("keypress", itemKeypress);
// }
//
// function editItem() {
//     // console.log(this.className);
//     this.className = "edit";
//     var input = this.querySelector("input");
//     input.focus();
//     input.setSelectionRange(0, input.value.length);
// }
//
// function updateItem() {
//     this.previousElementSibling.innerHTML = this.value;
//     this.parentNode.className = "";
// }
//
// function itemKeypress(event) {
//     if(event.which === 13 ) {
//         updateItem.call(this);
//     }
// }

/**
 * Click to/and replace
 */
// var newItemCounter = 1;
// var ourList = document.querySelector("#our-list");
// var ourButton = document.getElementById("our-button");
// var ourHeadline = document.getElementById("our-headline");
// var listItems = document.querySelectorAll("#our-list li");
//
// ourList.addEventListener("click", activateItem);
//
// function activateItem(e) {
//     if(e.target.nodeName == "LI") {
//         ourHeadline.innerHTML = e.target.innerHTML;
//         for(var i = 0; i < e.target.parentNode.children.length; i++) {
//             e.target.parentNode.children[i].classList.remove("active");
//         }
//         e.target.classList.add("active");
//     }
// }
//
// ourButton.addEventListener("click", createNewItem);
//
// function createNewItem() {
//     ourList.innerHTML += "<li>New Item " + newItemCounter + "</li>";
//     newItemCounter++;
// }

