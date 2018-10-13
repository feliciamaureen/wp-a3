function toggleWireframe() {
  let wfs = document.getElementById("wireframecss");
  let sts = document.getElementById("stylecss");
  // repeat for other stylesheets you are linking to
  wfs.disabled = !wfs.disabled;
  sts.disabled = !sts.disabled;
  // repeat for other stylesheets you are linking to
}

function Decrease(type) {
    debugger;
    var x = parseInt(document.getElementById('qty').value);
    x = isNaN(x) ? 0 : x;
    x < 1 ? x = 1 : '';
    x--;

    document.getElementById('qty').value = x;
}

function Increase() {
    var x = parseInt(document.getElementById('qty').value);
    x = isNaN(x) ? 0 : x;
    x++;

    var type = document.getElementById('chips').value;
    console.log(prices[type] * x);
    document.getElementById('qty').value = x;
}
