<table class="tbl_lista">
  <thead>
  <tr>
    <th><a href='?order=id'                  class="tajax"  title='Ordenar por Id'           >Id           {$filtros->iconOrder('id')}</a></th>
    <th><a href='?order=estado'              class="tajax"  title='Ordenar por Estado'       >Estado       {$filtros->iconOrder('estado')}</a></th>
    <th><a href='?order=nombre'              class="tajax"  title='Ordenar por Nombre'       >Nombre       {$filtros->iconOrder('nombre')}</a></th>
    <th><a href='?order=apellidos'           class="tajax"  title='Ordenar por Apellidos'    >Apellidos    {$filtros->iconOrder('apellidos')}</a></th>
      <th>Detalle</th>
    </tr>
  </thead>
  {section name=ic loop=$objs}
  <tbody>
    <tr  class="{cycle values="light,dark"}">
      <td>{$objs[ic]['id']}</td>
      <td>{$objs[ic]['estado']}</td>
      <td>{$objs[ic]['nombre']}</td>
      <td>{$objs[ic]['apellidos']}</td>
      <td></td>
    </tr>
  </tbody>
  {/section}
</table>
