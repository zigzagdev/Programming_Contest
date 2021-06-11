n=gets.to_i
cards=gets.split(" ").map &:to_i
array=cards.sort.reverse.to_a

alice=array.each_slice(2).map(&:first).sum
bob=array.filter.with_index{|n, i| i.odd?}.sum

p alice-bob
