
let $colors = $("input[type=color]");
$colors.on( "change", function() {
  const isDark = !!$(this).closest(".dark").length;
  const hex = this.value;
  let hsl1 = h2sl( hex, false );
  let hsl2 = h2sl( hex, false );
  if (isDark) {
    hsl1.l = hsl1.l > 50 ? 50 : hsl1.l;
    hsl2.l = hsl2.l > 50 ? 50 : hsl2.l;
  } else {
    hsl1.l = hsl1.l < 60 ? 60 : hsl1.l;
    hsl2.l = hsl2.l < 60 ? 60 : hsl2.l;
  }
  const tint1 = "hsl(" + (hsl1.h) + "," + hsl1.s + "%," + hsl1.l + "%)";
  const tint2 = "hsl(" + (hsl2.h + 40) + "," + hsl2.s + "%," + hsl2.l + "%)";
  const $form = $(this).closest("form");
  $form.attr({
    style: `--tint: ${tint1}; --tint2: ${tint2}`
  })
});




const h2sl = (hex, isString) => {
  // Convert hex to RGB first
  let r = 0, g = 0, b = 0;
  if (hex.length == 4) {
    r = "0x" + hex[1] + hex[1];
    g = "0x" + hex[2] + hex[2];
    b = "0x" + hex[3] + hex[3];
  } else if (hex.length == 7) {
    r = "0x" + hex[1] + hex[2];
    g = "0x" + hex[3] + hex[4];
    b = "0x" + hex[5] + hex[6];
  }
  // Then to HSL
  r /= 255;
  g /= 255;
  b /= 255;
  let cmin = Math.min(r,g,b),
      cmax = Math.max(r,g,b),
      delta = cmax - cmin,
      h = 0,
      s = 0,
      l = 0;

  if (delta == 0)
    h = 0;
  else if (cmax == r)
    h = ((g - b) / delta) % 6;
  else if (cmax == g)
    h = (b - r) / delta + 2;
  else
    h = (r - g) / delta + 4;

  h = Math.round(h * 60);

  if (h < 0)
    h += 360;

  l = (cmax + cmin) / 2;
  s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
  s = +(s * 100).toFixed(1);
  l = +(l * 100).toFixed(1);
  
  if( isString ) {
    return "hsl(" + h + "," + s + "%," + l + "%)";
  } else {
    return { h, s, l };
  }
}

