n,m=gets.split(" ").map &:to_i

 n.times {|i|
  a,b=gets.chomp.split(" ").map(&:to_i);
 if(a-5*b).abs>=m
   p i+1
 end
 }