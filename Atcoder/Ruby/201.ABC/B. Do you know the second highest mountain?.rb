n=gets.to_i
ps=n.times.map{s,t=gets.split;[s,t.to_i]}.sort_by(&:last)

puts ps[-2][0]
