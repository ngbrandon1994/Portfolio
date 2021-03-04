window.onload = function(){
  document.getElementById("button1").style.backgroundColor = "#696969";
  var text = document.getElementById("innerAboutList");

  onClickButton("button1");
}

function onClickButton(id){
  var buttonIDs = ["button1", "button2", "button3", "button4"];
  const tech = ["JavaScript / TypeScript", "Java", "HTML & CSS", "Ionic & Angular", "Node.js"];
  const tools = ["GitHub", "Git", "Bitbucket", "Heroku", "Visual Studio"];
  const classes = ["Mobile Web Content & Dev", "Project Management","Software Validation and Verification", "Software Risk", "Software QA"];
  const hobbies = ["Board Games", "Bowling", "Hiking", "Trading Card Games", "World building Games"];

  const index = buttonIDs.indexOf(id);
  const defaultColor = "#708090";
  buttonIDs.splice(index,1);
  document.getElementById(id).style.backgroundColor = "#696969";
  for(var i=0;i<buttonIDs.length;i++){
    document.getElementById(buttonIDs[i]).style.backgroundColor = defaultColor;
  }
  var lists = ``; 
  var arrayValue;

  if(index === 1){
    arrayValue = tools;
  } else if(index === 2){
    arrayValue = classes;
  } else if (index === 3){
    arrayValue = hobbies;
  } else{ // this is default so incase index is not 0-3 somehow this will always run; prevents error
    arrayValue = tech;
  }

  for(var j=0;j< arrayValue.length;j++){
    lists += `<li>${arrayValue[j]}</li>`;
  }
  
  var listText = document.getElementById("innerAboutList");
  listText.innerHTML = lists;
}