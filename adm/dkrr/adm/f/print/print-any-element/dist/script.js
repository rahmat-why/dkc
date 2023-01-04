function print() {
  const x = document.getElementsByTagName("head")[0].innerHTML;
  const iframe = document.createElement("iframe");
  iframe.onload = () => {
    console.log("Local iframe is now loaded.");
    setTimeout(() => {
      window.frames["ng-print"].focus();
      window.frames["ng-print"].print();
      document.body.removeChild(iframe);
    }, 500);
  };
  iframe.name="ng-print"
  iframe.style.position = "absolute";
  iframe.style.top = "-1000000px";
  document.body.appendChild(iframe);
  var frameDoc = iframe.contentWindow ? iframe.contentWindow : iframe.contentDocument.document ? iframe.contentDocument.document : iframe.contentDocument;
  frameDoc.document.open();
  frameDoc.document.write(x);
  frameDoc.document.write(
    document.getElementsByTagName("main")[0].innerHTML
  );
frameDoc.document.close();
  //remove iframe after print or cancelation
  setTimeout(function() {
    var a=document.querySelectorAll('iframe');
      a[0].parentNode.removeChild(a[0])
  }, 500);
}