function AllForm()
{
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','http://localhost/Formular/showall/showAllForm')
    ourRequest.onload = function() {
        var path = JSON.parse(ourRequest.responseText);
        //console.log(path);
        var i = 0;
        for (var j of path){

        var my_div = document.createElement("div");
        my_div.id="DivId" + i;
        my_div.setAttribute("class", "name");
        document.getElementById("showall").appendChild(my_div);


        var my_name = document.createElement("div");
        my_name.id="NameId" + i;
        my_name.setAttribute("class", "name");
        my_name.setAttribute("align", "center");
        document.getElementById("DivId" + i).appendChild(my_name);
        my_name.insertAdjacentHTML('beforeend',"Username: " + j.username);

        var my_label = document.createElement("label");
        document.getElementById("DivId" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Title");

        var my_title = document.createElement("div");
        my_title.id="TitleId" + i;
        my_title.setAttribute("class", "title");
        document.getElementById("DivId" + i).appendChild(my_title);
        my_title.insertAdjacentHTML('beforeend', j.title);

        var my_br = document.createElement("br");
        document.getElementById("DivId" + i).appendChild(my_br);


        var my_label = document.createElement("label");
        document.getElementById("DivId" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Description");

        var my_description = document.createElement("div");
        my_description.id="DescriptionId" + i;
        my_description.setAttribute("class", "description");;
        document.getElementById("DivId" + i).appendChild(my_description);
        my_description.insertAdjacentHTML('beforeend', j.description);

        var my_br = document.createElement("br");
        document.getElementById("DivId" + i).appendChild(my_br);


        var my_label = document.createElement("label");
        document.getElementById("DivId" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Gender");

        var my_gender = document.createElement("div");
        my_gender.id="GenderId" + i;
        my_gender.setAttribute("class", "gender");
        document.getElementById("DivId" + i).appendChild(my_gender);
        my_gender.insertAdjacentHTML('beforeend', j.gender);

        var my_br = document.createElement("br");
        document.getElementById("DivId" + i).appendChild(my_br);

        var my_label = document.createElement("label");
        document.getElementById("DivId" + i).appendChild(my_label);
        my_label.insertAdjacentHTML('beforeend', "Date of Creation");

        var my_date = document.createElement("div");
        my_date.id="DateId" + i;
        my_date.setAttribute("class", "created_date");
        document.getElementById("DivId" + i).appendChild(my_date);
        my_date.insertAdjacentHTML('beforeend', j.created_date);

        if (j.uploaded_file != null){
        var my_form2 = document.createElement("form");
        my_form2.setAttribute("class","form");
        my_form2.setAttribute("id","formid" + i);
        my_form2.setAttribute("method","POST");
        my_form2.setAttribute("action",j.uploaded_file);
        document.getElementById("showall").appendChild(my_form2);

        var my_submit2 = document.createElement("input");
        my_submit2.id="SubmitId" + i;
        my_submit2.setAttribute("class", "btn btn-default btn-login-submit btn-block m-t-md");
        my_submit2.setAttribute("type", "submit");
        my_submit2.setAttribute("value", "Open");
        document.getElementById("formid" + i).appendChild(my_submit2);}
        var my_br = document.createElement("br");
        document.getElementById("DivId" + i).appendChild(my_br);
        i++;
    	}
    };
    ourRequest.send();
}
AllForm();