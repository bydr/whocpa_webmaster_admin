export function scrollToSmooth(pos, time = 500, context = window) {
  const currentPos = window.scrollY;
  let start = null;
  pos = +pos;
  time = +time;
  window.requestAnimationFrame(function step(currentTime) {
    start = !start ? currentTime : start;
    const progress = currentTime - start;
    if (currentPos < pos) {
      context.scrollTo(0, ((pos - currentPos) * progress / time) + currentPos);
    } else {
      context.scrollTo(0, currentPos - ((currentPos - pos) * progress / time));
    }
    if (progress < time) {
      context.requestAnimationFrame(step);
    } else {
      context.scrollTo(0, pos);
    }
  });
}
