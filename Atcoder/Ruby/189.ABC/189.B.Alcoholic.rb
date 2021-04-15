n,x=gets.split.map(&:to_i)


sum=0;
(1..n).each do |i|
  v,p=gets.split.map(&:to_i)
  p *=0.01;
  sum+= v*p
  if(sum>x)
    puts i
    exit
  end
end
puts -1