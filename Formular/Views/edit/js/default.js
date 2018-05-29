function Form()
{
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','http://localhost/Formular/edit/showForm')
    ourRequest.onload = function() {
        var path = JSON.parse(ourRequest.responseText);
        console.log(path);
        var i = 0;
        for (var j of path){
        var my_form = document.createElement("form");
        my_form.setAttribute("class","form")
        my_form.setAttribute("id","id" + i,)
        my_form.setAttribute("method","POST")
        my_form.setAttribute("action","http://localhost/Formular/edit/updateInfo?element="+j.id)
        document.getElementById("formshow").appendChild(my_form);


        var my_name = document.createElement("div");
        my_name.id="NameId" + i;
        my_name.setAttribute("class", "name");
        document.getElementById("id" + i).appendChild(my_name);
        my_name.insertAdjacentHTML('beforeend', "Username: " + j.username);

        var my_label = document.createElement("label");
        my_label.setAttribute("for", "Titleid" + i);
        document.getElementById("id" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Title");

        var my_title = document.createElement("input");
        my_title.id="TitleId" + i;
        my_title.type="text";
        my_title.setAttribute("class", "form-control");
        my_title.setAttribute("value", j.title);
        my_title.setAttribute("name", "title");
        document.getElementById("id" + i).appendChild(my_title);

        var my_label = document.createElement("label");
        my_label.setAttribute("for", "Descriptionid" + i);
        document.getElementById("id" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Description");

        var my_description = document.createElement("textarea");
        my_description.id="DescriptionId" + i;
        my_description.setAttribute("class", "form-control");
        my_description.setAttribute("rows", "4");
        my_description.setAttribute("cols", "50");
        my_description.setAttribute("form", "id" + i);
         my_description.setAttribute("name", "description");
        document.getElementById("id" + i).appendChild(my_description);
        my_description.insertAdjacentHTML('beforeend', j.description);


        var my_label = document.createElement("div");
        my_label.setAttribute("for", "Genderid" + i);
        document.getElementById("id" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Gender");

        var my_gender = document.createElement("div");
        my_gender.id="GenderId" + i;
        my_gender.setAttribute("class", "gender");
        document.getElementById("id" + i).appendChild(my_gender);
        my_gender.insertAdjacentHTML('beforeend', j.gender);

        var my_label = document.createElement("div");
        my_label.setAttribute("for", "Titleid" + i);
        document.getElementById("id" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Date of creation");

        var my_date = document.createElement("div");
        my_date.id="DateId" + i;
        my_date.setAttribute("class", "created_date");
        document.getElementById("id" + i).appendChild(my_date);
        my_date.insertAdjacentHTML('beforeend', j.created_date);


        var my_submit = document.createElement("input");
        my_submit.id="SubmitId" + i;
        my_submit.setAttribute("class", "btn btn-default btn-login-submit btn-block m-t-md");
        my_submit.setAttribute("type", "submit");
        my_submit.setAttribute("value", "Edit");
        document.getElementById("id" + i).appendChild(my_submit);
        let str;
        if (j.uploaded_file != null){
       		str = j.uploaded_file.substr(26,j.uploaded_file.lenght);
       	} else {
       	 	str = "";
       	}

       	var my_br = document.createElement("br");
        document.getElementById("formshow").appendChild(my_br);

        var my_form2 = document.createElement("form");
        my_form2.setAttribute("id","formid" + i);
        my_form2.setAttribute("method","POST");
        my_form2.setAttribute("action","http://localhost/Formular/edit/delete?element=" + j.id + "&file=" + str);
        document.getElementById("formshow").appendChild(my_form2);
        //console.log(j.uploaded_file);
        //var str = img.substr(22, img.lenght);

        var my_submit2 = document.createElement("input");
        my_submit2.id="SubmitId" + i;
        my_submit2.setAttribute("class", "btn btn-default btn-login-submit btn-block m-t-md");
        my_submit2.setAttribute("type", "submit");
        my_submit2.setAttribute("value", "Delete");
        document.getElementById("formid" + i).appendChild(my_submit2);
        i++;
        var my_br = document.createElement("br");
        document.getElementById("formshow").appendChild(my_br);
        var my_br = document.createElement("br");
        document.getElementById("formshow").appendChild(my_br);
    	}
    };
    ourRequest.send();
}
Form();