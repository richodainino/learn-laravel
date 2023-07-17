prev_state = ""

todoItems = document.getElementsByClassName("todo-item")

for (let i = 0; i < todoItems.length; i++) {

    todoItems[i].addEventListener("focus", function () {
        prev_state = todoItems[i].innerText
    })
    
    todoItems[i].addEventListener("blur", function () {
        if (todoItems[i].innerText == prev_state || todoItems[i].innerText == "") {
            todoItems[i].innerText = prev_state
            return
        }

        updateName = document.getElementsByClassName("update-name")[i]
        updateName.value = todoItems[i].innerText
        
        updateForm = document.getElementsByClassName("update-form")[i]
        updateForm.submit()
    })
}