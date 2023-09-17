const validation = new JustValidate("#signup");

validation
    .addField("#name", [
        {
            rule: "required"
        }
    ]);
    validation
        .addField("#email", [
            {
                rule:"required"
            },
            {
                rule: "email"
            },
            {
                validator:(value)=>()=>{
                 return fetch("email.php?email= "+encodeURIComponent(value))
                    .then(function(response) {
                            return response.json();
                    })
                    .then(function(json) {
                        return json.available;
                    });
                },
                errorMessage: "the email is already taken"
            }
        ])
        .addField("#password"[
            {
                rule:"required"
            },
            {
                rule:"password"
            }
        ])
        addField("#password_confirmation",[
        {
            validator:(value, fields)=>{
                return value === fields["#password"].elem.value;
            },
            errorMessage:"password neet to be match"
        }
        ])
        .onSuccess((event) => {
            document.getElementById("signup").submit();
        });
    