<!DOCTYPE html>
<html>
    <body>
        <h1>edit department</h1>
        <form method="POST" action="/api/Departments">
            <label for="departmentName">departmentName:</label><br>
            <input type="text" id="departmentName" name="departmentName"><br>
            <label for="namePostman">namePostman:</label><br>
            <input type="text" id="namePostman" name="namePostman"><br>
            <label for="amountOfUsedCoffeCups">amountOfUsedCoffeCups:</label><br>
            <input type="number" id="amountOfUsedCoffeCups" name="amountOfUsedCoffeCups"><br>
            <label for="isDrinkableCoffee">isDrinkableCoffee:</label><br>
            <input type="checkbox" id="isDrinkableCoffee" name="isDrinkableCoffee"><br>
            <input type="submit">
        </form>
        <form method="POST" action="/api/Departments/delete">
            <label for="id">Department to delete:</label><br>
            <input type="number" id="id" name="id"><br>
            <input type="submit">
        </form>
        <h1>edit employee</h1>
        <form method="POST" action="/api/Employees">
            <label for="departmentId">departmentId:</label><br>
            <input type="number" id="departmentId" name="departmentId"><br>
            <label for="employeeName">employeeName:</label><br>
            <input type="text" id="employeeName" name="employeeName"><br>
            <input type="submit">
        </form>

        <form method="POST" action="/api/Employees/delete">
            <label for="id">Employee to delete:</label><br>
            <input type="number" id="id" name="id"><br>
            <input type="submit">
        </form>
        <h1>Departments</h1>
        <div id="resultDepartments"></div>
        <h1>Employee</h1>
        <div id="resultEmployees"></div>
        <script>
            let fetchResDepartments =  fetch('/api/Departments');

            fetchResDepartments.then(res => res.json().then(json => generateLabel(json,"resultDepartments")));

            let fetchResEmployee =  fetch('/api/Employees');

            fetchResEmployee.then(res => res.json().then(json => generateLabel(json,"resultEmployees")));

            //Generate the data at specified element id
            function generateLabel(item,elementId) {
                let html = "";
                for (let key in item) {
                    html += key + ": " + JSON.stringify(item[key]) + "<br>";
                }
                document.getElementById(elementId).innerHTML = html;
            }
        </script>
    </body>
</html>
