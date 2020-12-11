A, B, X, Y = gets.split.map(&:to_i)

v = A > B ? (A - 1) - B : B - A
puts [v*Y, v*2*X].min + X