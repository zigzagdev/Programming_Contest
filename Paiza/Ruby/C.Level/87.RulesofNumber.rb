n = gets.chomp
loop {
  r = n.chars.each_slice(1).map(&:join).reverse.join.to_i
  n = n.to_i
  if n == r
    puts r
    break
  else
    n += r
  end
  n = n.to_s
}
