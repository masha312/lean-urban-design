let errorPage = function(sketch) {
  sketch.preload = function() {
    sketch.font = sketch.loadFont('https://fonts.gstatic.com/s/lora/v16/0QI6MX1D_JOuGQbT0gvTJPa787weuxJBkqg.ttf')
  }
  sketch.setup = function() {
    let cnv = sketch.createCanvas(312, 160);
    cnv.parent(`canvas`);
    sketch.textAlign(sketch.CENTER, sketch.CENTER);

    pts = sketch.font.textToPoints(`404`, 56, 120, 112, {
      sampleFactor: 0.4,
      simplifyThreshold: 0
    })


  }
  sketch.draw = function() {
    sketch.background("#fafafa")

    const nl = 0.01

    sketch.noFill()
    sketch.stroke("#1a1a1a");
    sketch.strokeWeight(1)

    sketch.beginShape()
   	pts.forEach(point => {
  		drawPoints(point, sketch, nl);
    })
    sketch.endShape()
  }
}


new p5(errorPage);

function drawPoints(point, sketch, nl) {
  let movement = sketch.createVector(0, 0)

  if (sketch.mouseX) {
    distance = sketch.dist(point.x, point.y, sketch.mouseX, sketch.mouseY)
    movement = sketch.createVector(point.x - sketch.mouseX, point.y - sketch.mouseY)
    movement = movement.mult(4 / distance)
  }

  const nx = movement.x + (sketch.noise(nl * point.x, nl * point.y, nl * sketch.frameCount) * 10 - 1)
  const ny = movement.y + (sketch.noise(nl * point.x, nl * point.y, nl * sketch.frameCount) * 10 - 1)
  sketch.vertex(point.x + nx, point.y + ny)


}
