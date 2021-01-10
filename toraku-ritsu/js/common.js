function calc_hendou(a, b) {
  return Math.round((b - a) * 100) / 100;
}

function calc_toraku(a, b) {
  return Math.round((b / a - 1) * 100 * 100) / 100;
}
