
   
    const positionMap = {
        HR: [
            "HR Manager",
            "Recruitment Specialist",
            "Training Coordinator",
            "HR Assistant",
        ],
        Finance: [
            "Chief Financial Officer (CFO)",
            "Accountant",
            "Financial Analyst",
            "Bookkeeper",
            "Payroll Officer",
        ],
    };

    
    document.getElementById("editDepartment").addEventListener("change", function () {
        const department = this.value;
        const positionSelect = document.getElementById("editPosition");

         
        positionSelect.innerHTML = '<option value="">-- Select Position --</option>';

       
        if (department && positionMap[department]) {
            positionMap[department].forEach((position) => {
                const option = document.createElement("option");
                option.value = position;
                option.textContent = position;
                positionSelect.appendChild(option);
            });
        }
    });

    const position = {
        HR: [
            "HR Manager",
            "Recruitment Specialist",
            "Training Coordinator",
            "HR Assistant",
        ],
        Finance: [
            "Chief Financial Officer (CFO)",
            "Accountant",
            "Financial Analyst",
            "Bookkeeper",
            "Payroll Officer",
        ],
    };

    
    document.getElementById("department").addEventListener("change", function () {
        const department = this.value;
        const positionSelect = document.getElementById("position");

         
        positionSelect.innerHTML = '<option value="">-- Select Position --</option>';

       
        if (department && position[department]) {
            positionMap[department].forEach((position) => {
                const option = document.createElement("option");
                option.value = position;
                option.textContent = position;
                positionSelect.appendChild(option);
            });
        }
    });
