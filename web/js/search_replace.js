function highlight(value){
  $('.CodeMirror-lines').removeHighlight();
  $('.CodeMirror-lines').highlight(value);
}

function search() {
  console.log("function search called.");
  var str = "";
  var re = $('input[name="find"]').val();

  if (str.match(re, i)) {
    alert("ok");
  }
}


function replace(keyword){
 
}

function repBtnEnabled() {
  var repBtn = $('input[name="replace"]:button:disabled');

  // if searching strings exist..
  for ( var i = 0; i < repBtn.length; i++) {
    repBtn[i].disabled = "";
  }
}

function repBtnDisabled() {
  var repBtn = $('input[name="replace"]:button:disabled');

  // if searching strings exist..
  for ( var i = 0; i < repBtn.length; i++) {
    repBtn[i].disabled = "disabled";
  }
}
